<?php
include 'a_header.php';

$exp_sql = "SELECT * FROM `expert_registration`";
$exp_result = $conn->query($exp_sql);
$experts = $exp_result->num_rows;


$student_sql = "SELECT * FROM `student_registration`";
$stu_result = $conn->query($student_sql);
$students = $stu_result->num_rows;

$que_sql = "SELECT * FROM `student_registration`";
$que_result = $conn->query($que_sql);
$questions = $que_result->num_rows;

$stu_feedback_sql = "SELECT * FROM `student_feedback`";
$stu_feedback_result = $conn->query($stu_feedback_sql);
$stu_feedback = $stu_feedback_result->num_rows;

$exp_feedback_sql = "SELECT * FROM `expert_feedback`";
$exp_feedback_result = $conn->query($exp_feedback_sql);
$exp_feedback = $exp_feedback_result->num_rows;

$exp_answers_sql = "SELECT * FROM `expert_answers`";
$exp_answers_result = $conn->query($exp_answers_sql);
$exp_answers = $exp_answers_result->num_rows;


?>

<style>
  .ActiveDash {
    background: #d8c7ff;
  }
  
</style>

<div class="row mx-5 pe-5 text-center">
    <div class="col-sm-4 mt-4">
        <div class="card text-black mb-3" style="max-width:18rem;background-color: #BE95F4">
            <div class="card-header">Total Students</div>
            <div class="card-body">
                <h4 class="card-title"><?php echo $students; ?></h4>
                <a class="btn text-balck" href="Studentslist.php">View</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-4">
        <div class="card text-black mb-3" style="max-width:18rem;background-color: #BE95F4">
            <div class="card-header">Total Experts</div>
            <div class="card-body">
                <h4 class="card-title"><?php echo $experts; ?></h4>
                <a class="btn text-balck" href="Expertslist.php">View</a>
            </div>
        </div>
    </div>


     
    <div class="col-sm-4 mt-4">
        <div class="card text-balck mb-3" style="max-width:18rem;background-color: #BE95F4">
            <div class="card-header">Student Feedback</div>
            <div class="card-body">
                <h4 class="card-title"><?php echo $stu_feedback; ?></h4>
                <a class="btn text-balck" href="stu_feedback.php">View</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4 mt-4">
        <div class="card text-balck  mb-3" style="max-width:18rem;background-color: #BE95F4">
            <div class="card-header">Expert Feedback</div>
            <div class="card-body">
                <h4 class="card-title"><?php echo $exp_feedback; ?></h4>
                <a class="btn text-balck" href="exp_feedback.php">View</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4 mt-4">
        <div class="card text-balck mb-3" style="max-width:18rem;background-color: #BE95F4">
            <div class="card-header">Total Questions</div>
            <div class="card-body">
                <h4 class="card-title"><?php echo $questions; ?></h4>
                <a class="btn text-balck" href="questions.php">View</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-4">
        <div class="card text-balck mb-3" style="max-width:18rem;background-color: #BE95F4">
            <div class="card-header">Total Answer</div>
            <div class="card-body">
                <h4 class="card-title"><?php echo $exp_answers; ?></h4>
                <a class="btn text-balck" href="questions.php">View</a>
            </div>
        </div>
    </div>
</div>