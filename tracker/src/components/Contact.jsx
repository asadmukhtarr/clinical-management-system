import React from 'react';

export default function Contact() {
  return (
    <section className="py-5 bg-white">
      <div className="container">
        <div className="row justify-content-center">
          <div className="col-lg-8 text-center">
            <h2 className="text-primary mb-4">Get in Touch</h2>
            <p className="mb-5">We’re here to help. If you have any questions or need to schedule an appointment, please fill out the form below or contact us directly.</p>
          </div>
        </div>

        <div className="row">
          {/* Contact Form */}
          <div className="col-md-6">
            <form>
              <div className="mb-3">
                <label htmlFor="name" className="form-label">Full Name</label>
                <input type="text" className="form-control" id="name" placeholder="Enter your name" />
              </div>
              <div className="mb-3">
                <label htmlFor="email" className="form-label">Email Address</label>
                <input type="email" className="form-control" id="email" placeholder="Enter your email" />
              </div>
              <div className="mb-3">
                <label htmlFor="message" className="form-label">Your Message</label>
                <textarea className="form-control" id="message" rows="4" placeholder="Type your message"></textarea>
              </div>
              <button type="submit" className="btn btn-primary">
                <i className="fas fa-paper-plane me-2"></i>Send Message
              </button>
            </form>
          </div>

          {/* Contact Info */}
          <div className="col-md-6 mt-5 mt-md-0">
            <div className="bg-light p-4 rounded shadow">
              <h5><i className="fas fa-map-marker-alt text-primary me-2"></i> Address</h5>
              <p>123 Health St, Wellness City, Country</p>

              <h5><i className="fas fa-phone text-primary me-2"></i> Phone</h5>
              <p>+123 456 7890</p>

              <h5><i className="fas fa-envelope text-primary me-2"></i> Email</h5>
              <p>info@healthcare.com</p>

              <h5><i className="fas fa-clock text-primary me-2"></i> Working Hours</h5>
              <p>Mon - Sat: 9:00 AM - 6:00 PM</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
