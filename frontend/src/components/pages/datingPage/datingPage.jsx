import React from 'react';
import style from './datingPage.module.css';

export const DatingPage = (props) => {
	return (
		<div className={`container`}>
			<div className={`${style.filter}`}>Filter</div>

			<div className={`${style.cards}`}>Users cards</div>
		</div>
	);
};
