import style from './App.module.scss'
import { useState } from 'react';

function LayoutSettings() {
	const [count, setCount] = useState(0);

	function handleClick() {
		setCount(count + 1)
	}
	return(
		<div className='mb-4'>
			<button className='btn btn-primary' onClick={handleClick}>Decrease</button>
			<button className='btn btn-o-primary'>{count}</button>
			<button className='btn btn-primary' onClick={handleClick}>Increase</button>
		</div>
	)
}

function Builder() {
	return(
		<div className={style.container}>
			<LayoutSettings />
		</div>
	)
}

export default Builder
