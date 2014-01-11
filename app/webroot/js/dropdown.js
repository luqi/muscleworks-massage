//********************************************************************
// dropdown.js
// 
// JavaScript functions to add arbitrary hover effects for IE.  The
// basic purpose of the script is to take all elements of a given
// class underneath a specified node, and add mouseover/mouseout
// handlers to those elements to set and clear a given class name.
// CSS styles can then be applied to that assigned class to achieve
// hover-only styling.
// 
// Dependencies:
// 
//      http://www.avtokrator.org/cwynne/js/onload.js
//      http://www.avtokrator.org/cwynne/js/domfunc.js
//
//   Author:    Colin J. Wynne <cwynne(at)avtokrator(dot)org>
//   Created:   2006-08-16
//   Version:   (see RCS string below)
//
//********************************************************************
// $Id: dropdown.js,v 1.6 2008/04/13 22:37:46 cwynne Exp $
//********************************************************************

  // Default behavior will find all 'topmenu' class elements in the
  // document, and toggle the class 'active' on hover.
Dropdown.topClass       = "topmenu";
Dropdown.activeClass    = "active";
Dropdown.pause          = 500;          // In milliseconds.

  // Global list of all Dropdown objects.
Dropdown.list           = [];

  //******************************************************************
  // CONSTRUCTOR
  //******************************************************************
  // node = DOM element.
  //******************************************************************
function Dropdown(node) {

      // Make sure node is an ELEMENT.
    if(!node || !node.tagName) return null;

      // Properties
    this.active                 = false;
    this.node                   = node;
    this.dropNum                = Dropdown.list.length;

    Dropdown.list[this.dropNum] = this;

      // Methods
    this.setup                  = setDropEvents;

      // Initialize
    this.setup();

    return this;
}


  //******************************************************************
  // METHODS
  //******************************************************************
function setDropEvents() {

    if(!this.node) return null;

    var num = this.dropNum;

      // Activate onMouseOver, deactivate onMouseOut.  IE has some
      // issues with spurious mouseouts on layered DIVs, so what we
      // will *actually* do onMouseOut is set a timer to deactivate.
      // Then if the mouse re-enters before the timer is up, we forget
      // the timer and don't deactivate.
    this.node.onmouseover = function() { activateDropdown(num);   };
//  this.node.onmouseout  = function() { deactivateDropdown(num); };
    this.node.onmouseout  = function() { waitInactive(num);       };

    return 1;
}

  //******************************************************************
  // FUNCTIONS
  //******************************************************************
function createDropdowns(node, cls) {

    if(!node) node = document;
    if(! cls) cls  = Dropdown.topClass;

    var topNodes = getElementsByClass(node, cls);

    for(i = 0; i < topNodes.length; ++i) {
        var drop = new Dropdown( topNodes[i] );
    }

    return Dropdown.list;
}

function clearAllDropdowns() {

    for(i = 0; i < Dropdown.list.length; ++i)
        deactivateDropdown(i);

    return 1;
}

function activateDropdown(num) {

    var drop = Dropdown.list[num];

      // At a minimum, clear an inactivation timer.
    if(drop.timer) {
        clearTimeout(drop.timer);
        delete drop.timer;
    }
      // If we are still active, that's it.
    if(drop.isActive)
        return;

      // Otherwise, close everything else, add the activeClass and
      // report active status.
    clearAllDropdowns();
    addClass(drop.node, Dropdown.activeClass);

    drop.isActive = true;

    return 1;
}

function deactivateDropdown(num) {

    var drop = Dropdown.list[num];

      // If we are already inactive, do nothing.
    if(!drop.isActive)
        return;

      // Otherwise, clear the activeClass and report the new status.
    delClass(drop.node, Dropdown.activeClass);
    drop.isActive = false;

    return 1;
}

function waitInactive(num) {

    var drop = Dropdown.list[num];
    var code = "deactivateDropdown(" + num + ")";

    return drop.timer = setTimeout(code, Dropdown.pause);
}

  // On document load, apply mousever events to selected elements.
  // The effect is to add a specific class to those elements while
  // they are active.  CSS can then be used to select on that class,
  // rather than :hover.
addOnLoad( function() {

    var drops = createDropdowns(); clearAllDropdowns();

} );

//********************************************************************
// END
//********************************************************************