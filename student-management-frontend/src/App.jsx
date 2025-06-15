import React from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Login from "./Pages/login";
import Dashboard from "./Pages/dashboard";
// import Academic from "./Pages/Academic";
// import Elearning from "./Pages/ELearning";
// import Forum from "./Pages/studentforum";

function App() {
  return (
    <Router>
      <Routes>
        <Route path="/login" element={<Login />} />
        <Route path="/dashboard" element={<Dashboard />} />
        {/* <Route path="/academic" element={<Academic />} />
        <Route path="/elearning" element={<Elearning />} />
        <Route path="/forum" element={<Forum />} /> */}
      </Routes>
    </Router>
  );
}

export default App;
