Create an API endpoint to fetch courses and add student marks (server/index.js):

js
const express = require("express");
const cors = require("cors");
const bodyParser = require("body-parser");
const db = require("./db");

const app = express();
app.use(cors());
app.use(bodyParser.json());

// Fetch courses
app.get("/courses", (req, res) => {
    db.query("SELECT * FROM course", (err, result) => {
        if (err) throw err;
        res.json(result);
    });
});

// Add student marks
app.post("/add-marks", (req, res) => {
    const { studentId, courseId, marks } = req.body;
    const sql = "INSERT INTO student_marks (student_id, course_id, marks) VALUES (?, ?, ?)";

    db.query(sql, [studentId, courseId, marks], (err, result) => {
        if (err) throw err;
        res.json({ message: "Marks added successfully!" });
    });
});

app.listen(5000, () => console.log("Server running on port 5000"));
2. Fetch Data & Add Marks in React.js
Install Axios:

bash
npm install axios
Fetch courses and submit marks (client/src/AddMarks.js):

js
import React, { useEffect, useState } from "react";
import axios from "axios";

function AddMarks() {
    const [courses, setCourses] = useState([]);
    const [studentId, setStudentId] = useState("");
    const [courseId, setCourseId] = useState("");
    const [marks, setMarks] = useState("");

    useEffect(() => {
        axios.get("http://localhost:5000/courses")
            .then(response => setCourses(response.data))
            .catch(error => console.error("Error fetching courses:", error));
    }, []);

    const handleSubmit = () => {
        axios.post("http://localhost:5000/add-marks", { studentId, courseId, marks })
            .then(response => alert(response.data.message))
            .catch(error => console.error("Error adding marks:", error));
    };

    return (
        <div>
            <h1>Add Student Marks</h1>
            <input type="text" placeholder="Student ID" onChange={e => setStudentId(e.target.value)} />
            <select onChange={e => setCourseId(e.target.value)}>
                <option value="">Select Course</option>
                {courses.map(course => (
                    <option key={course.id} value={course.id}>{course.course_name}</option>
                ))}
            </select>
            <input type="number" placeholder="Marks" onChange={e => setMarks(e.target.value)} />
            <button onClick={handleSubmit}>Submit</button>
        </div> y
    );
}

export default AddMarks;