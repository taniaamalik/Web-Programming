const button = document.querySelector('#greet'); //mengambil berdasarkan idnya greet 

button.addEventListener('click', () => { //fungsi tanpa parameter, meregester suatu fungsi yang akan dipanggil saat sebuah event terjadi yaitu saat button diklik
	const name = document.querySelector('#name').value;
	//let = ke lokal variabel
	//var = global variable
	
	alert('Hello, ' + name); //mengalert respon dari client itu sendiri
});