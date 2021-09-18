module.exports = {
    root: true,
    env: {
      "browser": true,
      "node": true,
      "es6": true,
      "jquery": true
	  },
  	globals: {
    	"jQuery": "readonly",
    	"wp": "readonly"
		},
		rules: {
  		"prefer-const": "off", //es6
		}
}
