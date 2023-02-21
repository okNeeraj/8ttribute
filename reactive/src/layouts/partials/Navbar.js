function Navbar() {
	return (
		<>
			<header className="d-flex">
				<div className="ms-auto">
					<button type="button" className="btn btn-light" data-bs-theme-value="light">
						Light
					</button>

					<button type="button" className="btn btn-dark ms-2" data-bs-theme-value="dark">
						Dark
					</button>

					<button type="button" className="btn btn-primary ms-2" data-bs-theme-value="auto">
						Auto
					</button>
				</div>
			</header>
		</>
	)
}

export default Navbar
