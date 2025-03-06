<?php
include('view/header.php');

$assignment = get_assignment_by_id($assignment_id); // Fetch current assignment details by ID
?>
<h2>Update Assignment</h2>
<form action="." method="post">
    <input type="hidden" name="assignment_id" value="<?= $assignment['ID'] ?>">
    <label for="description">Description:</label>
    <input type="text" id="description" name="description" value="<?= htmlspecialchars($assignment['Description']) ?>" required>
    
    <label for="course_id">Course:</label>
    <select name="course_id" id="course_id" required>
        <?php foreach ($courses as $course) : ?>
            <option value="<?= $course['courseID'] ?>" <?= $assignment['courseID'] == $course['courseID'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($course['courseName']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    
    <button type="submit" name="action" value="update_assignment">Update Assignment</button>
</form>

<?php
include('view/footer.php');
?>
