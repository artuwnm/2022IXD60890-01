
const query = (options) => {
	return fetch('data/api.php',{
		method:'POST',
		body:JSON.stringify(options),
		headers:{'Content-Tpye':'application/json'}
	}).then(d=>d.json());
};

// fetch is a function that promises to do something

// CURRYING: to make a function make a function (result is another function)
const templater = f => a =>
	(Array.isArray(a)?a:[a])
	.reduce((r,o,i,a)=>r+f(o,i,a),'');
		// r=reducing value, o=current object as you looping through, i=index of the current object in the array, a=an array is been in the loop