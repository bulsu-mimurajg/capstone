import React, { useState } from 'react';

const StepCounter: React.FC = () => {
    const [currentStep, setCurrentStep] = useState(1);
    const totalSteps = 4;

    const nextStep = () => {
        if (currentStep < totalSteps) setCurrentStep(currentStep + 1);
    };

    const prevStep = () => {
        if (currentStep > 1) setCurrentStep(currentStep - 1);
    };

    return (
        <div className="text-center">
            <div className="text-[13px] text-black dark:text-white">
                Step {currentStep} of {totalSteps}
            </div>
            <div className="mt-[10px] space-x-2">
                <button
                    onClick={prevStep}
                    disabled={currentStep === 1}
                    className="px-3 py-1 rounded bg-gray-200 text-gray-700  disabled:opacity-50"
                >
                    Back
                </button>
                <button
                    onClick={nextStep}
                    disabled={currentStep === totalSteps}
                    className="px-3 py-1 rounded bg-blue-500 text-white disabled:opacity-50"
                >
                    Next
                </button>
            </div>
        </div>

    );
};

export default StepCounter;
