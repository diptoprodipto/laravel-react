import React, { Component, useState } from 'react'
import ReactDOM  from 'react-dom/client'

export default function User(props) {
    const [frameworks, setFramework] = useState(JSON.parse(props.data));

    const deleteItem = (itemToDelete) => {
        console.log(itemToDelete)
        let filtered = frameworks.filter(item => item.name !== itemToDelete)
        setFramework([...filtered])
    }

    return (
        <>
            <h2>User</h2>
            {frameworks.map((item) => 
                <div key={item.name}>
                    <h3>{item.name}</h3>
                    <button onClick={() => deleteItem(item.name)} >Delete</button>
                </div>
            )}
        </>
    )
}

if (document.getElementById('UserComponent')) {
    const root = ReactDOM.createRoot(document.getElementById("UserComponent"));
    var data = document.getElementById('UserComponent').getAttribute('data');
    root.render(<User data={data}/>);
}
