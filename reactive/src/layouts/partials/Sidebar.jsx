function Sidebar () {
	return (
		<>
			<aside className="sidebar">
				<div className="app-bar text-center">
					<div className="app-head fs-4 mb-4">
						<span className="material-icons-outlined">menu_open</span>
					</div>
					<div className="app-list">
						<a href="#!" className="active">
							<span className="material-icons-outlined">
								pending_actions
							</span>
						</a>
					</div>
					<div className="app-list">
						<a href="#!" className="">
							<span className="material-icons-outlined">
								rocket
							</span>
						</a>
					</div>
					<div className="app-list">
						<a href="#!" className="">
							<span className="material-icons-outlined">
								display_settings
							</span>
						</a>
					</div>
					<div className="app-list">
						<a href="#!" className="">
							<span className="material-icons-outlined">
								store
							</span>
						</a>
					</div>
				</div>

				<div className="app-menu">
					<div className="list-group">
						<a href="#!" className="list-group-item list-group-item-action active" aria-current="true">
							Dashboard
						</a>
						<a href="#!" className="list-group-item list-group-item-action">Installation</a>
						<a href="#!" className="list-group-item list-group-item-action">Blockchain</a>
						<a href="#!" className="list-group-item list-group-item-action">Analytics</a>
					</div>
				</div>
        	</aside>
		</>
	)
}

export default Sidebar;
