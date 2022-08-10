import React from 'react';
import style from './blogsPage.module.css';

export const BlogsPage = (props) => {
	return (
		<div className={`container ${style.container}`}>
			<div className={`${style.filter}`}>filter</div>

			<div className={`${style.blogsList}`}>Blog list</div>
		</div>
	);
};
