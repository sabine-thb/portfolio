function scrollToSection() {
    const section = document.getElementById("quiSuisJe");
    console.log(section)
    section.scrollIntoView({ behavior: "smooth" });
}

const cursor = document.querySelector('.cursor');
	document.addEventListener('mousemove', e => {
		cursor.setAttribute("style", " top: "+(e.pageY -10)+"px; left: "+(e.pageX -10)+"px; ")
	});

	const cursor2 = document.querySelector('.cursor2');
	document.addEventListener('mousemove', e => {
		cursor2.setAttribute("style", " top: "+(e.pageY -10)+"px; left: "+(e.pageX -10)+"px; ")
	});