const button = document.querySelector('#greet'); //mengambil berdasarkan idnya greet 

button.addEventListener('click', () => { //fungsi tanpa parameter, meregester suatu fungsi yang akan dipanggil saat sebuah event terjadi yaitu saat button diklik
	const xhr = new XMLHttpRequest();
	const name = document.querySelector('#name').value; //mengambil value di name
	const url = `http://localhost/ajax/ajax.php?name=${name}`; //buat url
	
	xhr.open('GET', url, true); //menggunakan method GET
	
	xhr.onreadystatechange = () => { //kalo komunikasi terjadi akan melakukan fungsi
		if (xhr.readyState !== 4){
			return;
		}
		if(xhr.status === 200) { //kode status http untuk komunikasi yang sukses
			alert(xhr.responseText); //mengalert respon dari server, nama dikirim ke server lalu dikirim tulisan ke client
		}
	};
	
	xhr.send(null);
});