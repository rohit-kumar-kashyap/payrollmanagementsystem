<style>
    .required_astrick{
        color:red;
    }
</style>
<div class="content">
    <div class="container-fluid">
        <?php foreach($this->editSaveDataFields as $row){
            $rowid = $row->id;
            $emp_id = $row->emp_id;
            $fullname = $row->fullname;
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
            $basic_salary = $row->basic_salary;
            $increment = $row->increment;
            $advance_money = $row->advance_money;
            $daily_pay = $row->daily_pay;
            $paid_leave = $row->paid_leave;
            $salary_generation_date = $row->salary_generation_date;
        ?>

        <?php if($netpay==''){?>
        <div class="card col-md-12">
            <div class="header_title">
                <h4 class="title" style="text-align:center;">Your Salary not generated yet!</h4>
            </div>
        </div>
        <?php }else{ ?>
        <div class="card col-md-12">
            <div class="header_title">
                <h4 class="title" style="text-align:center;">Your <?php echo $month;?> Salary</h4>
            </div>
            <div class="content">
                <table style="margin-left: 30px;margin-top: 20px;margin-bottom: 35px;">
                    <tbody>
                        <tr>
                            <td colspan="6"><p>Salary Generation Date : <strong><?php echo $salary_generation_date;?></strong></p></td>
                        </tr>
                        <tr>
                            <td><p style="padding-right: 25px;">Daily Pay : <strong><?php echo $daily_pay;?></strong></p></td>
                            <td><p style="padding-right: 25px;">Attendance Month : <strong><?php echo $month;?></strong></p></td>
                            <td><p style="padding-right: 25px;">Attendance Year : <strong><?php echo $year;?></strong></p></td>
                            <td><p style="padding-right: 25px;">Month Working Days : <strong><?php echo $working_days;?></strong></p></td>
                            <td><p style="padding-right: 25px;">No. of Present : <strong><?php echo $present_no;?></strong></p></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                        </tr>
                        <tr style="border-top:1px solid #000;border-bottom:1px solid #000;">
                            <td colspan="3"><h3 style="margin-bottom: 0px;padding-top: 10px;padding-bottom: 10px;">Total Payment</h3></td>
                            <td colspan="3"><h3 style="margin-bottom: 0px;padding-top: 10px;padding-bottom: 10px;">Total Deductions</h3></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                        </tr>
                        <tr>
                            <td colspan="3"><p style="margin-top: 1rem;">Basic Salary : <strong><?php echo $basic_salary;?></strong></p></td>
                            <td colspan="3"><p style="margin-top: 1rem;">PF : <strong><?php echo $pf;?></strong></p></td>
                        </tr>
                        <tr>
                            <td colspan="3"><p>Increment Amount : <strong><?php echo $increment;?></strong></p></td>
                            <td colspan="3"><p>ESI : <strong><?php echo $esi;?></strong></p></td>
                        </tr>
                        <tr>
                            <td colspan="3"><p>Travel Allowance : <strong><?php echo $travel_allowance;?></strong></p></td>
                            <td colspan="3"><p>Advance Money : <strong><?php echo $advance_money;?></strong></p></td>
                        </tr>
                        <tr>
                            <td colspan="3"><p>Dearness Allowance : <strong><?php echo $dearness_allowance;?></strong></p></td>
                            <td colspan="3"><p>No. of Absent : <strong><?php echo $absent_no;?></strong></p></td>
                        </tr>
                        <tr>
                            <td colspan="3"><p>HRA : <strong><?php echo $hra;?></strong></p></td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <td colspan="3"><p>Paid Leaves : <strong><?php echo $paid_leave;?></strong></p></td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                        </tr>
                        <tr style="border-top:1px solid #000;border-bottom:1px solid #000;">
                            <td colspan="3"><p style="margin-top: 1rem;"><strong>Total Salary : <?php echo $total_salary;?></strong></p></td>
                            <td colspan="3"><p style="margin-top: 1rem;"><strong>Net Pay : <?php echo $netpay;?></strong></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php }} ?>
    </div>
</div>