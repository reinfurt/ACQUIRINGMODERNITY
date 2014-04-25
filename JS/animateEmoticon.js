	var totalCanvas = 2;
	var thisCanvas = new Array();
	var thisContext = new Array();
	var thisFrames = new Array();
        var thisDelay = new Array();
        var thisCounter = new Array();
        var messages = new Array();
        // var xPos = 0;	// canvas width varies
        var xPos = 0;	// canvas width varies
        var yPos = 6;	// 36 px canvas height
	var delayAdjust = 1;	// to adjust global speed

        function init() {

		for (var i = 0; i < totalCanvas; i++) {

			thisCanvas[i] = document.getElementById("canvas"+i);
			thisContext[i] = thisCanvas[i].getContext("2d");
			thisContext[i].fillStyle = "#FF0000";
			thisContext[i].font = "16px Tahoma";
			thisContext[i].textAlign = "left";
			thisContext[i].textBaseline = "middle";
			thisCounter[i] = 0;
		}        

		// hack
		thisContext[0].textAlign = "right";
		thisContext[0].fillStyle = "#0000FF";

		// init array of arrays per canvas animation 

		messages[0] = 	[
				"",
				"ا",
				"اق",								
				"اقت",
				"اقتن",
				"اقتنا",
				"اقتناء ",
				"اقتناء ا",
				"اقتناء ال",
				"اقتناء الح",
				"اقتناء الحد",
				"اقتناء الحدا",
				"اقتناء الحداث",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة",
				"اقتناء الحداثة"
				];

		thisDelay[0] = 200;

		messages[1] = 	[
				"",
				"A",
				"Ac",
				"Acq",
				"Acqu",
				"Acqui",
				"Acquir",
				"Acquiri",
				"Acquirin",
				"Acquiring",
				"Acquiring ",
				"Acquiring M",
				"Acquiring Mo",
				"Acquiring Mod",
				"Acquiring Mode",
				"Acquiring Moder",
				"Acquiring Modern",
				"Acquiring Moderni",
				"Acquiring Modernit",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity",
				"Acquiring Modernity"
				];

		thisDelay[1] = 168.421;

		for (var j = 0; j < totalCanvas; j++) {

                	animateCanvas(j, messages);
		}
        }

        function animateCanvas(thisCanvasID, thisMessage) {

                thisCounter[thisCanvasID]++;
                thisContext[thisCanvasID].clearRect(0, 0, thisCanvas[thisCanvasID].width, thisCanvas[thisCanvasID].height);

		// frame number returns modulus to loop through messages array
		frameNumber = thisCounter[thisCanvasID] % messages[thisCanvasID].length;
		// thisContext[thisCanvasID].fillText(thisMessage[thisCanvasID][frameNumber], xPos, yPos);

		// ugly hack replaces previous line

if (thisCanvasID == 0) {
	thisContext[thisCanvasID].fillText(thisMessage[thisCanvasID][frameNumber], 200, yPos);
} else {
	thisContext[thisCanvasID].fillText(thisMessage[thisCanvasID][frameNumber], xPos, yPos);
} 

		// scope issue and could be written more elegantly as a callback, but fast enough for now
		var t = setTimeout("animateCanvas("+thisCanvasID+", messages)", thisDelay[thisCanvasID]*delayAdjust);
 	}
