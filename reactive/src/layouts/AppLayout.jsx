import React from "react";
import Sidebar from "./partials/Sidebar";
import Video from '../assets/images/skins/9.mp4';
import Navbar from "./partials/Navbar";

class Layout extends React.Component {
	render() {
		return (
			<>
				<div className="app sidebar-expandedF">
					<video className="app-skin" autoPlay loop muted
						data-poster="">
						<source src={Video} type="video/mp4" />
					</video>

					<Sidebar />

					<div className="app-container">
						{/* <Navbar /> */}
						<main>
							{this.props.children}
						</main>
					</div>
				</div>
			</>
		);
	}
}

export default Layout;
