/*
	dragObject
	Version: 1.3.0
	
	
	1.3.0 (23.08.2008)
	* Bugs beseitigt
	* ondrop erweitert, 
	  gibt dieser Event false zurück, 
	  wird das Objekt wieder an den Ausgangspunkt plaziert.
	* obj()-Methode eingefügt. gibt das Objekt zurück.
	* getPos() verbessert.
	
	1.2.4 (02.09.2007)
	* Der onmove Funktion wird die neu Position übergeben.
	
	1.2.3
	* onstart Event hinzugefügt
	
	1.2.2
	* gibt die ondrag Funktion false zurück,
	  kann das draggen verhindert werden
	* Doku überarbeitet, Quellcode übersichtlicher gemacht
	
	1.2.1
	* e.preventDefault() hinzugefügt,
	  verhindert das markieren von Text während des Dragvorgangs

  =========================================================
    DragObject()
  =========================================================

  Syntax:
  ---------------------------------------------------------
  new DragObject( Object, Object )

  Das 1. Objekt ist das mit dem man ziehen kann,
  dass zweite ist das was bewegt wird.
  Es muss also in der Hirachie oberhalb des ersten stehen.

  new DragObject( Object )

  Hier ist das Drag und das bewegte Objekt identisch

  new DragObject( )

  Es wird ein "leeres" DragObjekt erzeugt ohne Funkionalität.
  Mit dem Aufruf der ini() Funktion könne die Objekten
  nachträgliche zugeordnet werden.
  (in erster Linie wird dies benötigt, bei Objekten,
  die von DragObject erben)

  DragObjekt.ini( Object [, Object] );
  ---------------------------------------------------------
  Die Parameter haben die gleiche Bedeutung wie bei new.
  Tatsächlich ruft new() die ini Funktion auf,
  wenn ein oder zwei Parameter vorhanden sind.

  Das erzeugte Objekt kennt folgende Methoden:
  ---------------------------------------------------------

  .getPos()         - aktuelle Position des Objektes das bewegt wird
  .setPos(top, left)- positionieren
  .start(e)         - wird intern verwendet
  .move(e)          - wird während des Dragvorganges aufgerufen
  .end(e)           - Ende des Drags
  .obj()			- gibt das Objekt zurück.

  .ondrag			- Funktionsreferenz, die während des Dragvorganges aufgerufen wird
  .ondrop			- Funktionsreferenz, am Ende des Dragvorganges aufgerufen wird
  .onstart			- Funktionsreferenz, am Anfang des Dragvorganges aufgerufen wird

  ---------------------------------------------------------
  


*/

(function() {

window.DragObject = function (o_move, o_drag) {

	// private Variabeln
    var obj;            // Dieses Objekt empfängt den Event
    var move;           // Dieses Objekt wird bewegt
    var start_pos = []; // Die Startposition des Elements
	var restore_pos;
    var zIndex;
    
	// private Funktionen
    var Index = function(z) { move.style.zIndex = z; };

    this.ini = function(o_move, o_drag) {
		if(!o_move) return alert('kein Objekt');
		move = o_move;
		zIndex = move.style.zIndex || 0;

		obj = o_drag && o_drag.nodeType == 1 ? o_drag : o_move;
		obj.style.cursor = 'move';
		
		// Event aktivieren
		var self = this;
		obj.onmousedown = function(e) { dragObject = self; drag_start(e); };
	};
	this.obj = function() { return move;};
	
    this.ondrop = function() {return true;};
    this.ondrag = function() {return true;};
	this.onstart = function() {return true;};
    
	this.getPos = function() {
		return [move.offsetTop, move.offsetLeft, move.offsetHeight, move.offsetWidth];
	};
    
	this.setPos = function(t, l) {
		if(typeof t != 'undefined' && t != null) move.style.top = t + 'px';
		if(typeof l != 'undefined' && l != null) move.style.left = l + 'px';
	};
	
	this.start = function(e) {
		restore_pos = this.getPos();
		start_pos = this.getPos();
		
		var evt_pos = getEvtPos(e);
		
		start_pos[0] -= evt_pos[0];
		start_pos[1] -= evt_pos[1];
		
		Index(999);
		this.onstart(e);
	};
	
	this.move = function(e) {
		
		var evt_pos = getEvtPos(e);
		var new_top = evt_pos[0] + start_pos[0];
		var new_left = evt_pos[1] + start_pos[1];
		if(this.ondrag(e, new_top, new_left) != false) this.setPos(new_top, new_left);
    };
    this.end  = function (e) { 
		Index(zIndex); 
		if(false == this.ondrop(e)) this.setPos( restore_pos[0], restore_pos[1]);
	};
	
	
    if(o_move) this.ini(o_move, o_drag);
	
} // <-- DragObjekt



var dragObject = null;

function drag_start(e) {
	if( !dragObject ) return true;

	dragObject.start(e);
	document.onmouseup   = function (e) {
		document.onmouseup = document.onmousemove = null;
		dragObject.end(e);
		dragObject = null;
		return false;
	};
	document.onmousemove = function(e) {
		if(!dragObject) return end_drag(e);
		dragObject.move( e );
		return false;
	};
	if(e && e.preventDefault) e.preventDefault()
	return false;
}
/*
 * Hilfsfunktion:
 *
 * getEvtPos(e)
 * ermittelt die Position des Events
 * */
function getEvtPos(e)
{
    if(!e) e = window.event;
    var t = e.pageY ? e.pageY : e.clientY + window.document.body.scrollTop;
    var l = e.pageX ? e.pageX : e.clientX + window.document.body.scrollLeft;
    return [t, l];
}
// Ende und Aufruf der anonymen Funktion
})();