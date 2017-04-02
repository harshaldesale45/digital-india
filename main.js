var contextId = null;

var mic = createListener();
mic.onend = function() {
	mic.start();
}

mic.start();

mic.onresult = function(event) {
	var phrase = "";

	for (var i = 0; i < event.results.length; i++) {
		var result = event.results[i];

		if (result.isFinal) {
			phrase = result[0].transcript;
		}
	}

	$("#text").html(phrase);
	getResponse(phrase, function(response) {
		console.log(response);

		var data = JSON.parse(response);

		if ("dialog" in data && "prompt" in data.dialog) {
			contextId = data.dialog.contextId;

			$("#text").html(data.dialog.status + ": " + data.dialog.prompt);
		} else {
			contextId = null;
		}

		for (var i = 0; i < Config.modules.length; i++) {
			var module = Config.modules[i];

			if (data.topScoringIntent.intent == module.intent) {
				module.handler(data);
			}
		}

	}, contextId);
}
