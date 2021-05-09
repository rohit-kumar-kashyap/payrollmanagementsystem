<?php

    foreach ($pdfData as $row){
        $rowid = $row->id;
        $emp_id = $row->emp_id;
        $fullname = $row->fullname;
        $email = $row->email;
        $contact = $row->contact;
        $address = $row->address;
        $pincode = $row->pincode;
        $aadhar_number = $row->aadhar_number;
        $department = $row->department;
        $designation = $row->designation;
        $basic_salary = $row->basic_salary;
        $increment_amount = $row->increment_amount;
        $bank_name = $row->bank_name;
        $bank_branch_name = $row->bank_branch_name;
        $account_number = $row->account_number;
        $ifsc_code = $row->ifsc_code;
        $month = $row->month;
        $year = $row->year;
        $absent_no = $row->absent_no;
        $present_no = $row->present_no;
        $working_days = $row->working_days;
        $travel_allowance = $row->travel_allowance;
        $dearness_allowance = $row->dearness_allowance;
        $hra = $row->hra;
        $total_salary = $row->total_salary;
        $pf = $row->pf;
        $esi = $row->esi;
        $netpay = $row->netpay;
        $paid_leave = $row->paid_leave;
        $advance_money = $row->advance_money;
        $salary_generation_date = $row->salary_generation_date;
        $daily_pay = $row->daily_pay;
    }
    $total_deduction = $pf+$esi+$advance_money+(($absent_no-$paid_leave)*$daily_pay);

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Employee Salary Slip');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

$pdf->WriteHTML('<html>
	<head>
		<style>
			.salary-slip{
				margin: 15px;
			}
			.empDetail {
				width: 100%;
				text-align: left;
				border: 2px solid black;
				border-collapse: collapse;
				table-layout: fixed;
			}
			.head {
				margin: 10px;
				margin-bottom: 50px;
				width: 100%;
			}	
			.salaryMonth {
				text-align: center;
			}
			.myBackground {
				padding-top: 10px;
				text-align: left;
				border: 1px solid black;
				height: 40px;
			}
			.myAlign {
				text-align: center;
				border-right: 1px solid black;
			}
			.myTotalBackground {
				padding-top: 10px;
				text-align: left;
				background-color: #EBF1DE;
				border-spacing: 0px;
			}
			.align-4 {
				width: 25%;
				float: left;
			}
			.tail {
				margin-top: 35px;
			}
			.align-2 {
				margin-top: 25px;
				width: 50%;
				float: left;
			}
			.border-center {
				text-align: center;
			}
			.border-center th, .border-center td {
				border: 1px solid black;
			}
			th, td{
			    padding:15px;
			}
		</style>
	</head>
	<body>
		<div class="salary-slip" >
            <table class="empDetail">
				<tr height="100px" style="background-color:#c2d69b;">
					<td colspan="4">
						<img height="90px" src="https://organisationmedia.toggleflow.com/demo/logo.png">
					</td>
					<td style="text-align: right;font-size: 20px;" colspan="4">Company Name</td>
				</tr>
				<tr>
					<th style="border-top:1px solid #000; border-right:1px solid #000;" colspan="2">Employee Id :</th>
					<td style="border-top:1px solid #000;" colspan="2">'.$emp_id.'</td>
					
					<th style="border-top:1px solid #000; border-right:1px solid #000; border-left:1px solid #000;" colspan="2">Bank Name :</th>
					<td style="border-top:1px solid #000;" colspan="2">'.$bank_name.'</td>
				</tr>
				<tr>
					<th style="border-right:1px solid #000;" colspan="2">Full Name :</th>
					<td colspan="2">'.$fullname.'</td>
					
					<th style="border-right:1px solid #000;border-left:1px solid #000;" colspan="2">Branch Name :</th>
					<td colspan="2">'.$bank_branch_name.'</td>
				</tr>
				<tr>
				    <th style="border-right:1px solid #000;" colspan="2">Department :</th>
					<td colspan="2">'.$department.'</td>
					
					<th style="border-right:1px solid #000;border-left:1px solid #000;" colspan="2">Account No. :</th>
					<td colspan="2">'.$account_number.'</td>
				</tr>
				<tr>
				    <th style="border-right:1px solid #000;" colspan="2">Designation :</th>
					<td colspan="2">'.$designation.'</td>
					
					<th style="border-right:1px solid #000;border-left:1px solid #000;" colspan="2">IFSC No. :</th>
					<td colspan="2">'.$ifsc_code.'</td>
				</tr>
				<tr>
					<th style="border-right:1px solid #000;" colspan="2">Address :</th>
					<td colspan="2">'.$address.'</td>
					
					<th style="border-right:1px solid #000;border-left:1px solid #000;" colspan="2">AADHAR No:</th>
					<td colspan="2">'.$aadhar_number.'</td>
				</tr>
				<tr>
				    <th style="border-right:1px solid #000;" colspan="2">Pincode :</th>
					<td colspan="2">'.$pincode.'</td>
					
					<td style="border-right:1px solid #000;border-left:1px solid #000;" colspan="2"></td>
					<td colspan="2"></td>
                </tr>
                <tr>
                    <th style="border-right:1px solid #000;" colspan="2">Email Id :</th>
					<td colspan="2">'.$email.'</td>
					
					<td style="border-right:1px solid #000;border-left:1px solid #000;" colspan="2"></td>
					<td colspan="2"></td>
                </tr>
                <tr>
                    <th style="border-right:1px solid #000; border-bottom:1px solid #000;" colspan="2">Mobile No. :</th>
					<td style="border-bottom:1px solid #000;" colspan="2">'.$contact.'</td>
					
					<td style="border-bottom:1px solid #000; border-right:1px solid #000;border-left:1px solid #000;" colspan="2"></td>
					<td style="border-bottom:1px solid #000;" colspan="2"></td>
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
				<tr class="myBackground">
					<th colspan="2" style="border-top:1px solid #000;border-right:1px solid #000;">Total Salary</th>
					<th style="border-top:1px solid #000;"></th>
					<th style="border-top:1px solid #000;border-right:1px solid #000;">Amount (Rs.)</th>
					<th colspan="2" style="border-top:1px solid #000;border-right:1px solid #000;">Deductions</th>
					<th style="border-top:1px solid #000;"></th>
					<th style="border-top:1px solid #000;">Amount (Rs.)</th>
				</tr>
				<tr>
					<th colspan="2" style="border-top:1px solid #000; border-right:1px solid #000;">Basic Salary</th>
					<td style="border-top:1px solid #000;"></td>
					<td class="myAlign" style="border-top:1px solid #000;">'.$basic_salary.'</td>
					<th colspan="2" style="border-top:1px solid #000;border-right:1px solid #000;">Advance Money</th>
					<td style="border-top:1px solid #000;"></td>
					<td class="myAlign" style="border-top:1px solid #000;">'.$advance_money.'</td>
				</tr>
				<tr>
					<th colspan="2" style="border-right:1px solid #000;">Salary Increment</th>
					<td></td>
					<td class="myAlign">'.$increment_amount.'</td>
					<th colspan="2" style="border-right:1px solid #000;">PF</th>
					<td></td>
					<td class="myAlign">'.$pf.'</td>
				</tr>
				<tr>
					<th colspan="2" style="border-right:1px solid #000;">Travel Allowance</th>
					<td></td>
					<td class="myAlign">'.$travel_allowance.'</td>
					<th colspan="2" style="border-right:1px solid #000;">ESI</th>
					<td></td>
					<td class="myAlign">'.$esi.'</td>
				</tr>
				<tr>
					<th colspan="2" style="border-right:1px solid #000;">Dearness Allowance</th>
					<td></td>
					<td class="myAlign">'.$dearness_allowance.'</td>
					<th colspan="2" style="border-right:1px solid #000;">Leaves</th>
					<td></td>
					<td class="myAlign">'.$absent_no.'</td>
				</tr>
				<tr>
					<th colspan="2" style="border-right:1px solid #000;">HRA</th>
					<td></td>
					<td class="myAlign">'.$hra.'</td>
					<th colspan="2" style="border-right:1px solid #000;"></th>
					<td></td>
					<td class="myAlign"></td>
				</tr>
				<tr>
					<th colspan="2" style="border-right:1px solid #000;">Paid Leaves</th> 
					<td></td>
					<td class="myAlign">'.$paid_leave.'</td>
					<th colspan="2" style="border-right:1px solid #000;"></th>
					<td></td>
					<td class="myAlign"></td>
				</tr>
				
				<tr class="myBackground">
					<th colspan="2" style="border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Total Salary</th>
					<td style="border-top:1px solid #000;border-bottom:1px solid #000;"></td>
					<td class="myAlign" style="border-top:1px solid #000;border-bottom:1px solid #000;">'.$total_salary.'</td>
					<th colspan="2" style="border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">Total Deductions</th>
					<td style="border-top:1px solid #000;border-bottom:1px solid #000;"></td>
					<td class="myAlign" style="border-top:1px solid #000;border-bottom:1px solid #000;">'.$total_deduction.'</td>
				</tr>
				<tr height="40px">
					<th colspan="2"></th>
					<th></th>
					<td class="table-border-right"></td>
					<th colspan="2" style="border-right:1px solid #000;border-bottom:1px solid #000;border-left:1px solid #000;">Net Salary</th>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;">'.$netpay.'</td>
				</tr>
				<tr>
					<td colspan="2" style="border-top:1px solid #000;"></td> 
					<td style="border-top:1px solid #000;"></td>
					<td class="myAlign" style="border-top:1px solid #000;"></td>
					<td colspan="4" style="border-top:1px solid #000;"></td>
				</tr>
				<tbody class="border-center">
					<tr>
						<th style="border-top:1px solid #000;border-right:1px solid #000;">Month</th>
						<th style="border-top:1px solid #000;border-right:1px solid #000;">Year</th>
						<th style="border-top:1px solid #000;border-right:1px solid #000;">Working Days</th>
						<th style="border-top:1px solid #000;border-right:1px solid #000;">Present</th>
						<th style="border-top:1px solid #000;border-right:1px solid #000;">Absent</th>
						<th style="border-top:1px solid #000;border-right:1px solid #000;">Paid Leaves</th>
						<th style="border-top:1px solid #000;" colspan="2">Salary Generation Date</th>
					</tr>
					<tr>
						<td style="border-top:1px solid #000;border-right:1px solid #000;"></td>
						<td style="border-top:1px solid #000;border-right:1px solid #000;"></td>
						<td style="border-top:1px solid #000;border-right:1px solid #000;"></td>
						<td style="border-top:1px solid #000;border-right:1px solid #000;"></td>
						<td style="border-top:1px solid #000;border-right:1px solid #000;"></td>
						<td style="border-top:1px solid #000;border-right:1px solid #000;"></td> 
						<td style="border-top:1px solid #000;" colspan="2"></td>
					</tr>
					<tr>
						<td style="border-right:1px solid #000;">'.$month.'</td>
						<td style="border-right:1px solid #000;">'.$year.'</td>
						<td style="border-right:1px solid #000;">'.$working_days.'</td>
						<td style="border-right:1px solid #000;">'.$present_no.'</td>
						<td style="border-right:1px solid #000;">'.$absent_no.'</td> 
						<td style="border-right:1px solid #000;">'.$paid_leave.'</td>
						<td colspan="2">'.$salary_generation_date.'</td>
					</tr>
				</tbody>
            </table>
		</div>
	</body>
</html>
     ');
$pdf->Output('Salary Slip.pdf', 'I');