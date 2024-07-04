// Checklist.js
import React, { useContext } from 'react';
import { ChecklistContext } from './CheklistContext';

const Checklist = () => {
    const { checklist, updateChecklist } = useContext(ChecklistContext);

    const handleCheckboxChange = (event) => {
        const { name, checked } = event.target;
        updateChecklist(name, checked);
    };

    return (
        <>
            <div className="container">
                <h3 className='text-center'>Checklist Status</h3>
                <hr />
                <h5 className='text-center'>Are you a Citizen : {checklist.isCitizen ? "Yes" : "No"}</h5>
                <h5 className='text-center'>Are you over 21 : {checklist.isOver21 ? "Yes" : "No"}</h5>
                <br />
                <div className="row col-md-12" align="center">
                    <label>
                        Are you a Citizen?
                        <input className='m-2' type="checkbox" name="isCitizen"
                            checked={checklist.isCitizen}
                            onChange={handleCheckboxChange}

                        />
                    </label>

                    <label>
                        Are you over 21?
                        <input className='m-2'
                            type="checkbox"
                            name="isOver21"
                            checked={checklist.isOver21}
                            onChange={handleCheckboxChange}
                        />
                    </label>
                </div>
            </div>
        </>
    );
};

export default Checklist;
