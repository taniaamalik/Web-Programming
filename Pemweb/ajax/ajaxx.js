const button = document.querySelector('#greet'); //mengambil berdasarkan idnya greet 

button.addEventListener('click', () => { //fungsi tanpa parameter, meregester suatu fungsi yang akan dipanggil saat sebuah event terjadi yaitu saat button diklik
	const name = document.querySelector('#name').value; //mengambil value di name
	const url = `http://localhost/ajax/ajax.php?name=${name}`; //buat url
	
	axios.get(url).then(response => {
	alert(response.data);
	});
});