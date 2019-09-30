@extends('layouts/myapp')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-10">
			<h6 class="text-center">Education is above all</h6>
		</div>
		<div class="col-2">
			<h6>Ph No:123456789</h6>
		</div>
	</div>
	<div class="row">
		<div class="col-11">
			<h1 class=text-center>BRIGHT FIELD EDUCATION ACADEMY</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-11">
			<h5 class="text-center">Student Academic Progress Report</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-11">
			<h6 class="text-center">Final Terminal Examination-2075</h6>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<h6 class="text-center">Student Name: </h6>
		</div>
		<div class="col-6">
			<h6 class="text-center">Grade: </h6>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<h6 class="text-center">Section: </h6>
		</div>
		<div class="col-5">
			<h6 class="text-center">Roll No: </h6>
		</div>
	</div>
	<div class="row">
		<table class="table table-bordered">

			<thead>
				<tr>
					<th rowspan="2">SN</th>
					<th rowspan="2">Subject Name</th>
					<th rowspan="2">Full Marks</th>
					<th rowspan="2">Pass Marks</th>
					<th colspan="4" scope="colgroup">obtained marks</th>
					<th rowspan="2">Total Marks</th>
					<th rowspan="2">Grade</th>
					<th rowspan="2">GPA</th>

				<tr>
					<th scope="col">1st Term</th>
					<th scope="col">2nd Term</th>
					<th scope="col">3rd Term</th>
					<th scope="col">4th Term</th>
				</tr>



				</tr>
			</thead>
			<tbody>
				<tr>

					<td>1</td>
					<td>English</td>
					<td>100</td>
					<td>40</td>
					<td>40</td>
					<td>40</td>
					<td>40</td>
					<td>45</td>
					<td>65</td>
					<td>1</td>
					<td>2.9</td>
				</tr>



				<tr>

					<td>1</td>
					<td>English</td>
					<td>100</td>
					<td>40</td>
					<td>40</td>
					<td>40</td>
					<td>40</td>
					<td>45</td>
					<td>65</td>
					<td>1</td>
					<td>2.9</td>
				</tr>

				<tr>

					<td>1</td>
					<td>English</td>
					<td>100</td>
					<td>40</td>
					<td>40</td>
					<td>40</td>
					<td>40</td>
					<td>45</td>
					<td>65</td>
					<td>1</td>
					<td>2.9</td>
				</tr>

				<tr>

					<td>1</td>
					<td>English</td>
					<td>100</td>
					<td>40</td>
					<td>40</td>
					<td>40</td>
					<td>40</td>
					<td>45</td>
					<td>65</td>
					<td>1</td>
					<td>2.9</td>
				</tr>

				<tr>

					<td></td>
					<td>Total</td>
					<td>400</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>

		</table>
	</div>
	<div class="row">
		<div class="col-3">
			<h4>Evaluation</h4>
			<p style="border:1px; border-style:solid; border-color:black; padding: 1em;">
				Percentage <label class="col-3" style="width:100px;height:20px;border:1px solid #000;">600</label><br>
				Result <label class="col-3" style="width:100px;height:20px;border:1px solid #000;">600</label><br>
				Position <label class="col-3" style="width:100px;height:20px;border:1px solid #000;">600</label><br>
				Grade <label class="col-3" style="width:100px;height:20px;border:1px solid #000;">600</label><br>
			</p>
			<h4>Remarks:</h4>
			<h6>Weak! Study very hard in all subjects</h6><br> <br>
			
		</div>
		


		<div class="col-6">
			<p style="border:1px; border-style:solid; border-color:black; padding: 1em;">Art

				<label class="col-8" style="width:100px;height:20px;border:1px solid #000;">600</label><br> 
				English Handwriting <label class="col-4" style="width:100px;height:20px;border:1px solid #000;">600</label><br> 
				Nepali Handwriting <label class="col-4" style="width:100px;height:20px;border:1px solid #000;">600</label><br>
				 Hygiene<label class="col-4" style="width:100px;height:20px;border:1px solid #000;">600</label><br> 
				 Rhymes <label class="col-4" style="width:100px;height:20px;border:1px solid #000;">600</label><br>
				 Dance <label class="col-4" style="width:100px;height:20px;border:1px solid #000;">600</label><br> 
				 Music <label class="col-4" style="width:100px;height:20px;border:1px solid #000;">600</label></p>

		</div>

		<div class="col-3">
			<p style="border:1px; border-style:solid; border-color:black; padding: 1em;">Attendance <br>
				School Days <label style="width:100px;height:20px;border:1px solid #000;">600</label><br>
				Present Days<label style="width:100px;height:20px;border:1px solid #000;">600</label><br>
				Absent Days <label class="col-4" style="width:100px;height:20px;border:1px solid #000;">600</label><br>
			</p>
			<div class="row" style="width: 200px; float:right; height:150px; border:1px solid #000;margin:10px">
				<div class="row">



					<div class="col-10">

						<u>Grading system</u> <br>
						90&above=A+,80&above=A<br>
						70&above=B+,60&above=B<br>
						50&above=C+,40&above=C<br>
						30&above=D+,20&above=D<br>

					</div>
				</div>


			</div>

		</div>

		<div class="row">
			<div class="col-4">
				<SPAN STYLE="text-decoration:overline; font-weight:bold">Grade Teacher</SPAN>
			</div>
			<div class="col-4">
				<SPAN STYLE="text-decoration:overline; font-weight:bold">Date of Issues</SPAN>
			</div>
			<div class="col-4">
				<SPAN STYLE="text-decoration:overline; font-weight:bold">Principal</SPAN>
			</div>
		</div>
		

		


		

	</div>
</div>
@endsection