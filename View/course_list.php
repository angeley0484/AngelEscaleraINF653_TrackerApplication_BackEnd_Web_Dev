<?php
include('view/header.php');

// Fetch current course details by ID
if (isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];
    $course = get_course_by_id($course_id);
}

if (!$course) {
    echo "<p>Course not found. Please try again.</p>";
    exit();
}
?>

<h2>Update Course</h2>
<form action="." method="post">
    <input type="hidden" name="course_id" value="<?= $course['courseID'] ?>">

    <label for="course_name">Course Name:</label>
    <input type="text" id="course_name" name="course_name" value="<?= htmlspecialchars($course['courseName']) ?>" required>

    <button type="submit" name="action" value="update_course">Update Course</button>
</form>

<a href=".?action=list_courses">Back to Course List</a>

<?php
include('view/footer.php');
?>
