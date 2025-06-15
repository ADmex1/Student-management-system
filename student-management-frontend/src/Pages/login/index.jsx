import React, { useState } from "react";
import { useNavigate } from "react-router-dom";
import { useForm } from "react-hook-form";
import { toast } from "react-toastify";
import './login.css';

const Login = () => {
    const { register, handleSubmit, formState: { errors } } = useForm();
    const navigate = useNavigate();
    const [loading, setLoading] = useState(false);
    const [alert, setAlert] = useState({ show: false, message: "", type: "" });

    const onSubmit = async (data) => {
        setLoading(true);
        setAlert({ show: false, message: "", type: "" }); // Clear previous alerts

        try {
            const response = await fetch("http://localhost:8000/api/login", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(data),
                credentials: "include",
            });
            const result = await response.json();
            if (response.ok) {
                setAlert({ show: true, message: "Login successful! Redirecting...", type: "success" });
                toast.success("Login successful!");
                setTimeout(() => {
                    navigate("/dashboard");
                }, 1500);
            } else {
                setAlert({ show: true, message: result.message || "Invalid credentials. Please try again.", type: "error" });
                toast.error(result.message || "Login failed");
            }
        } catch (error) {
            setAlert({ show: true, message: "Network error. Please check your connection and try again.", type: "error" });
            toast.error("An error occurred.");
        } finally {
            setLoading(false);
        }
    };

    return (
        <div className="login-container">
            <div className="login-card">
                <h2>Login</h2>

                {/* Alert Component */}
                {alert.show && (
                    <div className={`alert ${alert.type}`}>
                        <span className="alert-icon">
                            {alert.type === 'success' ? '✓' : '⚠'}
                        </span>
                        <span className="alert-message">{alert.message}</span>
                        <button
                            className="alert-close"
                            onClick={() => setAlert({ show: false, message: "", type: "" })}
                        >
                            ×
                        </button>
                    </div>
                )}

                <form className="login-form" onSubmit={handleSubmit(onSubmit)}>
                    <div className="input-group">
                        <input
                            {...register("email", { required: "Email is required" })}
                            placeholder="Email"
                            type="email"
                        />
                        {errors.email && <p className="error-message">{errors.email.message}</p>}
                    </div>

                    <div className="input-group">
                        <input
                            type="password"
                            {...register("password", { required: "Password is required" })}
                            placeholder="Password"
                        />
                        {errors.password && <p className="error-message">{errors.password.message}</p>}
                    </div>

                    <button
                        type="submit"
                        className={`login-button ${loading ? 'loading' : ''}`}
                        disabled={loading}
                    >
                        {loading ? "Logging in..." : "Login"}
                    </button>
                </form>
            </div>
        </div>
    );
};

export default Login;