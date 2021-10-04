<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	<h1>Fibonacci</h1>
		<script>
		var n=prompt("fibonacci ke : ");
		a=0;
		b=1;
		if(n==1){
		document.write(a);
		}
		if(n==2){
		document.write(b);
		}
		for(i=1;i<=n-2;i++){
        c = a+b;
		a = b;
		b = c;
		};
		document.write(c);
		</script>
	</body>
</html>
