import React from 'react'

export default function About() {
  return (
    <div>
<section className="py-5 bg-light">
  <div className="container">
    <div className="row align-items-center">
      <div className="col-md-6 mb-4 mb-md-0">
        <img src="https://images.pexels.com/photos/7580250/pexels-photo-7580250.jpeg?auto=compress&cs=tinysrgb&h=500" 
             alt="About Healthcare" className="img-fluid rounded shadow" />
      </div>
      <div className="col-md-6">
        <h2 className="text-primary mb-3">About HealthCare Center</h2>
        <p>
          At HealthCare Center, we believe that quality health services should be accessible, compassionate, and patient-focused. 
          Our team of experienced medical professionals work tirelessly to ensure that every patient receives the best care possible.
        </p>
        <p>
          From general checkups to specialized treatments, we are here to guide you through every step of your health journey with state-of-the-art technology and a personalized approach.
        </p>
        <a href="/" className="btn btn-primary mt-3">
          <i className="fas fa-calendar-check me-2"></i> Schedule an Appointment
        </a>
      </div>
      
    </div>
  </div>
</section>

    </div>
  )
}
