import React from 'react'
import { Link } from 'react-router-dom'

export default function Header(props) {
  return (
    <div>
      <nav className="navbar navbar-expand-lg navbar-dark bg-primary">
        <div className="container-fluid">
          <Link className="navbar-brand" to="/"><i className="fas fa-heartbeat"></i> {props.title}</Link>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>

          <div className="collapse navbar-collapse" id="navbarNav">
            <ul className="navbar-nav ms-auto">
              <li className="nav-item">
                <Link to="/" className="nav-link"><i className="fas fa-home"></i> Home</Link>
              </li>
              <li className="nav-item">
                <Link to="/about" className="nav-link"><i className="fas fa-info-circle"></i> About</Link>
              </li>
              <li className="nav-item">
                <Link to="/doctors" className="nav-link"><i className="fas fa-user-md"></i> Doctors</Link>
              </li>
              <li className="nav-item">
                <Link to="/appointment" className="nav-link"><i className="fas fa-calendar-check"></i> Schedule Appointments</Link>
              </li>
              <li className="nav-item">
                <Link to="/book" className="nav-link"><i className="fas fa-plus-circle"></i> New Appointment</Link>
              </li>
              <li className="nav-item">
                <Link to="/track" className="nav-link"><i className="fas fa-search-location"></i> Track Your Appointment</Link>
              </li>
              <li className="nav-item">
                <Link to="/contact" className="nav-link"><i className="fas fa-envelope"></i> Contact</Link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  )
}
