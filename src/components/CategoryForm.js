import React, { useState } from 'react';
import api from '../services/api';

const CategoryForm = () => {
    const [name, setName] = useState('');

    const handleSubmit = async (e) => {
        e.preventDefault();
        await api.post('/category/create', { name });
        alert('Catégorie ajoutée !');
    };

    return (
        <form onSubmit={handleSubmit}>
            <input
                type="text"
                placeholder="Nom de la catégorie"
                value={name}
                onChange={(e) => setName(e.target.value)}
            />
            <button type="submit">Ajouter</button>
        </form>
    );
};

export default CategoryForm;
