# voice-luis-web

Web application that takes voice input, passes it to LUIS, performs actions and talks back to
the user

Save the following configuration to ```config.js``` and fill in the correct values
```javascript
var Config = {
	luisAppId: "",
	luisApiKey: "",
	voice: "Swedish Female", // http://responsivevoice.org/text-to-speech-languages/

	modules: [ ] // Modules will add themselves here
}
```

## Modules

- ```setcolor.js``` - sets document background color

You have to add these to the top of ```index.html```
