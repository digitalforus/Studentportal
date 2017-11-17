<html>
        <body>
        <div align="center">
             <div style="max-width: 680px; min-width: 500px; border: 2px solid #e3e3e3; border-radius:5px; margin-top: 20px">   
        	    <div>
        	        
        	    </div> 
        	    <div  style="background-color: #fbfcfd; border-top: thick double #cccccc; text-align: left;">
        	        <div style="margin: 30px;">
             	        <p>
                 	        Dear {{$user->surname}} {{$user->firstName}},<br> <br>
                 	        Welcome to Femsam Educational Consultancy!<br> <br>
                 	        We have created an account for you. Here are a few details about you:<br><br>
             	        </p>
             	        <table style="text-align: left;">
             	            <tr>
             	                <th>User Name</th>
             	                <td>: {{$user->userName}}</td>
             	            </tr>
             	            <tr>
             	                <th>Email</th>
             	                <td>: {{$user->email}}</td>
             	            </tr>
             	        </table>
             	        <br>  <br>
             	       
             	            Here is the link to access your the login area:<a href="student/login">LINK</a><br><br>
                            Please Contact the Admin Manager if you have any questions<br><br>
                            Once again, thank you!!!<br><br>
                        
             	        <div style="text-align: Right;">
             	            With warm regards,<br>
                            Femsam Educational Consultancy Team,
             	        </div>
             	    </div>
        	    </div>   
        	</div>   
    	</div>
  	    <center>2017 © Femsam. ALL Rights Reserved.</center>
    	</body>
	</html>	
