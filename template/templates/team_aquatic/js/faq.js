(function (window, document) {
	
	function setupQuestion(question) {
		var answers, temp, fx;
		answers = [];
		
		temp = question;
		do {
			temp = temp.getNext();
			
			if (temp && temp.hasClass('answer')) {
				answers.push(temp);
			}
		} while (temp && temp.hasClass('answer'));
		
		if (answers.length === 0) {
			return;
		}
		
		question.setStyle('cursor', 'pointer');
		
		temp = new Element('div', { 'class': 'answers' });
		temp.adopt(answers);
		temp.inject(question, 'after');
		
		fx = new Fx.Slide(temp, {
			duration: 150
		});
		fx.hide();
		
		question.addEvent('click', function () {
			fx.toggle();
		});
	}
	
	window.addEvent('domready', function () {
		$$('.question').each(function (q) {
			setupQuestion(q);
		});
	});
})(this, this.document);