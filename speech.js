var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;

function createListener() {
	var recognition = new SpeechRecognition();
	recognition.continuous = true;
	recognition.interimResults = false;

	return recognition;
}
