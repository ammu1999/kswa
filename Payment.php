<!DOCTYPE html>
<html>
<title>payment</title>
<script type="text/javascript">
		function chk()
		{
		

				var ch=/^([a-z A-Z_\-])+$/;
				var num=/^([0-9_\-])+$/;
				if(document.getElementById("cdno").value.match(num))
				{
					if(document.getElementById('cdno').value.length==16)
					{}
				  else
				  {
				  	alert("Enter Valid Number");
					document.getElementById("cdno").focus();
					return false;
				  }
				}
				else
				{
					alert("Enter Valid Number");
					document.getElementById("cdno").focus();
					return false;
				}
				if(document.getElementById("name").value.match(ch))
				{}
				else
				{
					alert("Invaild Name");
					document.getElementById("name").focus();
					return false;
				}
				if(document.getElementById("cvv").value.match(num))
				{
					if(document.getElementById('cvv').value.length==3)
					{}
				  else
				  {
				  	alert("Enter Valid CVV");
					document.getElementById("cvv").focus();
					return false;
				  }
				}
				else
				{
					alert("Enter Valid CVV");
					document.getElementById("cvv").focus();
					return false;
				}
				
		}
	</script>
<head>
</head>
<body>
	<div class="pay" style="margin-right: 231px;margin-left:433px;padding-top: 33px;padding-bottom:30px;padding-left:104px;border:2px solid black; box-shadow:5px 5px 5px ">
		<center><img src="Payment.png" width="40%"></center>
		<form method="post" onsubmit="return chk()">
<table  cellpadding="20px">
	<?php
	?>
	<tr>
			                         <td>Consumer id:</td>
								<td colspan="4"><input type="text" id="am" name="cno" value="" required  style="width: 350px;height:25px"></td>
	</tr>
	                         <tr>
	                         	<td>Amount:</td>
								<td colspan="4"><input type="number" id="am" name="amt" value="0" required  style="width: 350px;height:25px"></td>
							</tr>
							<tr>
								<td style="font-size: 20px">Card Type :</td>
								<td colspan="2"><input type="radio" name="r1">VISA</td>
								<td colspan="2"><input type="radio"name="r1">MasterCard</td>
							</tr>
							<tr>
								<td>Card Number :</td>
								<td colspan="4"><input type="text" id="cdno" required style="width: 350px;height:25px"></td>
							</tr>
							<tr>
								<td>Card Holder Name :</td>
								<td colspan="4"><input type="text" id="name" style="width: 350px;height:25px" required></td>
							</tr>
							<tr>
								<td>Expiry Date :</td>
								<td>MM :</td>
								<td>
									<select name="MM" style="width: 55px;height:25px" required>
										<option>Jan</option>
										<option>Feb</option>
										<option>Mar</option>
										<option>Apr</option>
										<option>May</option>
										<option>Jun</option>
										<option>Jul</option>
										<option>Aug</option>
										<option>Sep</option>
										<option>Oct</option>
										<option>Nov</option>
										<option>Dec</option>
									</select>
								</td>
								<td>YYYY :</td>
								<td>
									<select name="YYYY" style="width: 55px;height:25px" required>
										<option>19</option>
										<option>20</option>
										<option>21</option>
										<option>22</option>
										<option>23</option>
										<option>24</option>
										<option>25</option>
										<option>26</option>
										<option>27</option>
										<option>28</option>
										<option>29</option>
										<option>30</option>
										<option>31</option>
										<option>32</option>
										<option>33</option>
										<option>34</option>
										<option>35</option>
										<option>36</option>
										<option>37</option>
										<option>38</option>
										<option>39</option>
										<option>40</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>CVV :</td>
								<td colspan="4"><input type="text" style="width: 115px;height:25px" id="cvv"required></td>
							</tr>
						</table>
						<center><input type="submit" name="pay" style=" width:268px;height:50px; background-color: blue;border-radius: 30px" value="PAY NOW"></center>
						<?php
						session_start();
					$con=mysql_connect("localhost","root","");
					mysql_select_db("freecharge",$con);
					$uid=$_SESSION['aa'];
					$acc="select * from user where id='$uid' ";
				    $res=mysql_query($acc);
				    while($ar=mysql_fetch_array($res))
				    {
				    $a=$ar[7];
				    }
					if(isset($_POST['pay']))
					{
						$b=$_POST["amt"];
				        $total=$a+$b;
						$wall="update user set amount='$total' where id='$uid'";
						mysql_query($wall);
					   header('location:paymentsucessfull.php');
					}
			
					?>
					</form>
					</div>
					</body>
					</html>