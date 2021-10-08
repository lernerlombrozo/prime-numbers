export const timeTask = (task, ...params) => {
    const startTime = Date.now();
    task([...params]);
    return Date.now() - startTime;
};
