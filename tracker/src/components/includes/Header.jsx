import React from 'react'

export default function Header() {
  return (
    <div>
        <nav className="navbar navbar-expand-lg navbar-dark bg-primary">
            <div className="container-fluid">
                <a className="navbar-brand" href="/"><i className="fas fa-heartbeat"></i> HealthCare</a>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarNav">
                <ul className="navbar-nav ms-auto">
                    <li className="nav-item">
                    <a className="nav-link active" href="/"><i className="fas fa-home"></i> Home</a>
                    </li>
                    <li className="nav-item">
                    <a className="nav-link" href="/"><i className="fas fa-info-circle"></i> About</a>
                    </li>
                    <li className="nav-item">
                    <a className="nav-link" href="/"><i className="fas fa-user-md"></i> Doctors</a>
                    </li>
                    <li className="nav-item">
                    <a className="nav-link" href="/"><i className="fas fa-calendar-check"></i> Schedule Appointments</a>
                    </li>
                    <li className="nav-item">
                    <a className="nav-link" href="/"><i className="fas fa-plus-circle"></i> New Appointment</a>
                    </li>
                    <li className="nav-item">
                    <a className="nav-link" href="/"><i className="fas fa-search-location"></i> Track Your Appointment</a>
                    </li>
                    <li className="nav-item">
                    <a className="nav-link" href="/"><i className="fas fa-envelope"></i> Contact</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
  )
}
