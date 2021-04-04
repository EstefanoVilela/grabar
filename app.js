var rec;

var btnStart = document.getElementById('btnStart');
var btnStop = document.getElementById('btnStop');
var btnPlayText = document.getElementById('btnPlayText');
var texto = document.getElementById('texto');

if(!("webkitSpeechRecognition" in window)){
    alert("Disculpas, no puedes usar la API");
}else{
	console.log("Todo bien!");
    rec = new webkitSpeechRecognition();
    // rec.lang = "es-PE";
	rec.lang = 'es-ES';
    rec.continuous = true;
    rec.interim = true;
	// rec.interimResults = true;

    rec.addEventListener("result", (event) => {
		console.log('\n\n==========\n\nonresult\n----------\n');
		
		let voice = event.results[event.results.length-1][0];
		
		texto.innerHTML = voice.transcript;
		console.log('Transcript: ' + voice.transcript);
		console.log('Confidence: ' + voice.confidence);
	});
    
	rec.addEventListener("error", (event) => {
		console.error("errorGrabacion");
		console.log(event);
		console.log(event.error);
	});
	
	rec.addEventListener("nomatch", (event) => {
		speak('No entendí');
	});
}

btnStart.addEventListener('click', () => {
	rec.start();
    console.log('start');
});

btnStop.addEventListener('click', () => {
    rec.stop();
    console.log('stop');
});

/*========== VOZ ==========*/
btnPlayText.addEventListener('click', () => {
    let speech = new SpeechSynthesisUtterance();
    speech.text = texto.value;
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;

    window.speechSynthesis.speak(speech);
});
