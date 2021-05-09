<?php

foreach ($pdfData as $row){
    $rowid = $row->id;
    $emp_id = $row->emp_id;
    $company_name = $row->company_name;
    $department = $row->department;
    $posting_location = $row->posting_location;
    $month = $row->month;
    $year = $row->year;
    $offer_number = $row->offer_number;
    $join_letter_date = $row->join_letter_date;
    $firstname = $row->firstname;
    $lastname = $row->lastname;
    $address = $row->address;
    $designation = $row->designation;
    $reporting_manager = $row->reporting_manager;
    $annual_ctc = $row->annual_ctc;
    $expect_join_date = $row->expect_join_date;
    $city = $row->city;
    $location = $row->location;
}

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Joining Letter');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

$pdf->WriteHTML('<table cellspacing="0" cellpadding="3" > 
					<tr>
						<td>
							<h2 align="center" style="color:#26476e;"> Letter of Offer </h2>
						</td>
					</tr>
					<tr>
						<td>
							<h2 align="center" style="color:#8b1b1b; font-size:11px;"> (Permanent Employment) </h2>
						</td>
					</tr>
				</table>
				REF NO:'.$company_name.'/'.$department.'/'.$month.'/'.$year.'/'.$offer_number.'<br/>
				'.$join_letter_date.'<br/><br/>'.$firstname.''.$lastname.'<br/>'.$address.'<br/>
				Sub:  Job offer<br/><br/><br/>
				Dear Mr/Ms '.$lastname.'<br/><br/>
				We are pleased to offer you the position of '.$designation.' in our Kalikahut Restaurant based at '.$posting_location.'.<br/><br/>
				Your immediate supervisor will be '.$reporting_manager.'. We trust that your knowledge, skills and experience will be among our most valuable assets.<br/><br/>
				As discussed and agreed with you, you will be eligible to receive the following beginning on your joining date:
				<ul>
					<li>
						<b>Salary:</b> Annual gross starting salary of Rs. '.$annual_ctc.', subject to tax and other statutory deductions.
					</li>
					<li>
						<b>Sales Incentive:</b> As per the prevailing company scheme Only Applicable for Sales personnel
					</li>
					<li>Business Travel allowance and reimbursements as per company policy.</li>
				</ul>
				This offer letter is valid till '.$expect_join_date.'. Please send a signed copy of this letter indicating your acceptance to join and resignation acceptance letter from your current employer to our HR.<br/><br/>
				Your Appointment Letter will be issued on the date of joining. The joining formalities and induction will be carried out in our '.$location.' office. <br/><br/>
				Please submit the following documents to HR at the time of your joining:  (1) photocopies of your degree certificates, (2) certifications, if any, (3) experience/ relieving letters (4) two color passport-size photos, (5) latest salary slip from your previous organization and (6) proof of address.<br/><br/>
				We look forward to welcome you aboard.<br/><br/>
				Sincerely, <br/><br/>
				For '.$company_name.'<br/><br/><br/>
				'.$designation.'');
$pdf->Output('Joining Letter.pdf', 'I');