	function toggle_desc(elem){
		var description=elem.parentNode.children[1];
		if(description.classList.contains('open-desc')){
			description.classList.remove('open-desc');
			return 0;
		}
		description.classList.add('open-desc');
	}
