/**
 * PHP Form Validation With Javascript
 * author: lintx
 * lang: js/es5
 */
 
(function () {
"use strict";

const query = (q, ctx) => (ctx || document).querySelector(q);
const queryAll = (q, ctx) => (ctx || document).querySelectorAll(q);
const form = query('form.php-email-form');
const submit = form.submit;
const loading = query('.loading', form);
const sentMessage = query('.sent-message', form);
const errMessage = query('.error-message', form);

const setClassDisplay = (el, type) => {
	el.classList[type]('d-block');
}

form.onsubmit = async function(e) {
	// prevent default action
	e.preventDefault();
	
	const t = e.target;
	const action = t.getAttribute('action');
	
	if (!action) {
		setClassDisplay(loading, 'remove');
		errMessage.innerText = 'The form action property is not set!';
		setClassDisplay(errMessage, 'add');
		return;
	}
	
	setClassDisplay(loading, 'add');
	setClassDisplay(sentMessage, 'remove');
	setClassDisplay(errMessage, 'remove');
	
	const formData = new FormData();
	const name = t.name;
	const email = t.email;
	const subject = t.subject;
	const message = t.message;
	
	// formData.append('name', name.value);
	// formData.append('email', email.value);
	// formData.append('subject', subject.value);
	// formData.append('message', message.value);
	
	try {
		const res = await sendEmail(action, t);
		
		if(res.ok) {
        	res = await res.text();
    	} else {
        	throw new Error(`${res.status} ${res.statusText} ${res.url}`); 
    	}
    	
    	const data = res;
    	setClassDisplay(loading, 'remove');
    	
    	if (data.trim() == 'OK') {
    		setClassDisplay(sentMessage, 'add');
    		t.reset(); 
    	} else {
    		throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action);
    	}
	} catch (e) {
		alert(e.message);
		setClassDisplay(loading, 'remove');
		errMessage.innerText = e.message;
		setClassDisplay(errMessage, 'add');
	} finally {
		setClassDisplay(errMessage, 'remove');
		setClassDisplay(sentMessage, 'add');
	}
}

function sendEmail(action, formData) {
	return fetch(action, {
		method: 'POST',
		body: formData,
		headers: {
			'X-Requested-With': 'XMLHttpRequest'
		}
	});
}
})();
