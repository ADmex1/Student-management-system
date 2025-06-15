import React from "react";
import { useNavigate } from "react-router-dom";
import './dashboard.css';

const Dashboard = () => {
    const navigate = useNavigate();

    const handleLogout = () => {
        // Clear token/session if stored
        navigate("/login");
    };

    return (
        <div className="dashboard-container">
            <h1>Welcome to the Student Portal</h1>
            <p>Select a system to access:</p>

            <div className="options-grid">
                <div className="dashboard-option" onClick={() => navigate("/academic")}>
                    Academic System
                </div>
                <div className="dashboard-option" onClick={() => navigate("/elearning")}>
                    E-Learning
                </div>
                <div className="dashboard-option" onClick={() => navigate("/forum")}>
                    Student Forum
                </div>
            </div>

            <button className="logout-btn" onClick={handleLogout}>
                Logout
            </button>
        </div>
    );
};

export default Dashboard;
