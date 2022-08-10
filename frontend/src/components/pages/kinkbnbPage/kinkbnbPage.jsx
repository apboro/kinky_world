import React from 'react';
import style from './kinkbnbPage.module.css';

export const KinkbnbPage = (props) => {
	return (
		<div className={`container ${style.container}`}>
			<div className={`${style.filter}`}>filter</div>

			<div className={`${style.kinkBNBList}`}>KinkBNB list</div>
		</div>
	);
};
