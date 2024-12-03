import React, { useState, useEffect } from 'react';
import api from '../services/api';

const ProductForm = () => {
    const [name, setName] = useState('');
    const [price, setPrice] = useState('');
    const [categories, setCategories] = useState([]);
    const [categoryId, setCategoryId] = useState('');

    useEffect(() => {
        const fetchCategories = async () => {
            const response = await api.get('/category');
            setCategories(response.data);
        };
        fetchCategories();
    }, []);

    const handleSubmit = async (e) => {
        e.preventDefault();
        await api.post('/product/create', { name, price, category_id: categoryId });
        alert('Produit ajouté !');
    };

    return (
        <form onSubmit={handleSubmit}>
            <input
                type="text"
                placeholder="Nom du produit"
                value={name}
                onChange={(e) => setName(e.target.value)}
            />
            <input
                type="number"
                placeholder="Prix"
                value={price}
                onChange={(e) => setPrice(e.target.value)}
            />
            <select value={categoryId} onChange={(e) => setCategoryId(e.target.value)}>
                <option value="">Sélectionnez une catégorie</option>
                {categories.map((cat) => (
                    <option key={cat.id} value={cat.id}>{cat.name}</option>
                ))}
            </select>
            <button type="submit">Ajouter</button>
        </form>
    );
};

export default ProductForm;
