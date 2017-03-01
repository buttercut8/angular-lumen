export interface ModelTodo {
    name : string;
    description : string;
    images : string;
    user_id : number;
    constructor (todo_name : string, todo_description: string, todo_images: string, todo_users : number)
    {
        this.name = todo_name;
        this.description = todo_description;
        this.images = todo_images;
        this.user_id = todo_users;
    }
}
