// ChecklistContext.js
import React, { createContext, useState } from 'react';

// Create a Context for the checklist
export const ChecklistContext = createContext();

// Create a Provider component
export const ChecklistProvider = ({ children }) => {
  const [checklist, setChecklist] = useState({
    isCitizen: false,
    isOver21: false,
  });

  // Function to update the checklist state
  const updateChecklist = (option, value) => {
    setChecklist(prevChecklist => ({
      ...prevChecklist,
      [option]: value
    }));
  };

  return (
    <>
    <ChecklistContext.Provider value={{ checklist, updateChecklist }}>
      {children}
    </ChecklistContext.Provider>
    </>
  );
};
