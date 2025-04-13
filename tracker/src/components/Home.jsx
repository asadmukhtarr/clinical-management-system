const Home = () => {
    return (
        <div>
            <div class="bg-light py-5 text-center">
            <div class="container">
                <h1 class="display-5 fw-bold text-primary">Welcome to HealthCare Center</h1>
                <p class="lead">Your health is our priority. Meet the best doctors and schedule your appointments online.</p>
            </div>
            </div>
            <div class="container py-5">
            <h2 class="text-center text-primary mb-4">Our Doctors</h2>
            <div class="row g-4">
                <div class="col-md-4">
                <div class="card h-100 text-center">
                    <img src="https://images.pexels.com/photos/8460047/pexels-photo-8460047.jpeg?auto=compress&cs=tinysrgb&h=300" class="card-img-top" alt="Doctor 1" />
                    <div class="card-body">
                    <h5 class="card-title">Dr. Sarah Khan</h5>
                    <p class="card-text">Cardiologist</p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card h-100 text-center">
                    <img src="https://images.pexels.com/photos/8460047/pexels-photo-8460047.jpeg?auto=compress&cs=tinysrgb&h=300" class="card-img-top" alt="Doctor 2" />
                    <div class="card-body">
                    <h5 class="card-title">Dr. Ali Raza</h5>
                    <p class="card-text">Dermatologist</p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card h-100 text-center">
                    <img src="https://images.pexels.com/photos/8460047/pexels-photo-8460047.jpeg?auto=compress&cs=tinysrgb&h=300" class="card-img-top" alt="Doctor 3" />
                    <div class="card-body">
                    <h5 class="card-title">Dr. Maria Sheikh</h5>
                    <p class="card-text">Neurologist</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="bg-white py-5 border-top">
                <div class="container">
                    <h2 class="text-center text-primary mb-4">About Us</h2>
                    <div class="p-4 border rounded bg-light">
                    <p class="mb-0">
                        At HealthCare, we are committed to providing the best medical services to our patients. With a team of highly
                        qualified doctors and state-of-the-art facilities, we ensure that you receive top-notch care and personalized
                        treatment every step of the way.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default Home;