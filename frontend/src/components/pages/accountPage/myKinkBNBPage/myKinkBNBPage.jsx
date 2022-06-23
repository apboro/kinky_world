import React from 'react';
import style from './myKinkBNBPage.module.css';

export const MyKinkBNBPage = (props) => {
	return (
		<div className={`container`}>
			<div className={`${style.header}`}>
				<div className={`${style.infoBlock}`}>Info block</div>

				<div className={`${style.myKinkBNBInfo}`}>My KinkBNB info</div>
			</div>
		</div>
	);
};
