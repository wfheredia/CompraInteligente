
<html>
    <head>
        <script src="http://static.mlstatic.com/org-img/sdk/mercadolibre-1.0.4.js"></script>
        <script type="text/javascript" src="js/index/index.js"></script>
        <script type="text/javascript" src="js/libs/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="js/libs/jquery-migrate-1.0.0.min.js"></script>
        <script type="text/javascript" src="js/libs/ext-all.js"></script>

        <title></title>
    </head>
    
            <script type="application/javascript">
function loguear()
{
	MELI.init ({ client_id : 6977659590438028 });
	MELI.login(function() {
		MELI.get(
			"/users/me",{},
			function(data) { alert("Hello "+MELI.getToken()) }
		);
		
	});


}

</script>
    <body>
        <a href="#" onclick="loguear();">ssss</a> 
        <table align="center" width="800" height="auto">
            <tr>
                <td>
                    <table height="200" width="800" border="1">
                        <tr>
                            <td>
                                Aplicacion Compra Inteligente
                            </td>
                        </tr>    

                    </table>
                <td>
            </tr>
            <tr>
                <td>
                    <table height="600" width="800" border="1">
                        <tr>
                            <td width="400" border="1">
                                <form action="class/auth/login.php" method="post">
                                    <table width="400" border="1">
                                        <tr>
                                            <td width="126"><input type="submit" id="idboton" value="ingresar" /></td>
                                        </tr>
                                    </table>
                                </form>
                            </td>
                            <td width="400" border="1">

                            </td>
                        </tr>    
                    </table>
                </td>

            </tr>
        </table>
    </script>
</body>
</html>
