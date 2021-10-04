function readChat(){
	axios.get('http://localhost/chat/chat-read.php')
		.then(res => {
			document.querySelector('#chat').value = res.data;
		})
		
	setTimeout(readChat, 1000);
}

readChat();

const message = document.querySelector('#message');

message.addEventListener('keyup', e => {
	if(e.keycode == 13){ //kode enter
		const text = message.value;
		const url = `http://localhost/chat/chat-write.php?text=${text}`;
		
		axios.get(url).then(res => {
			message.value ='';
		});
	}
});