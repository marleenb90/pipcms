<?php
declare(strict_types=1);

namespace PIPcmsCore\Infrastructure\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PIPcmsCore\Domain\Models\Author as AuthorModel;

class Author extends Controller
{
    public function index()
    {
        return AuthorModel::all();
    }

    public function show(AuthorModel $author)
    {
        return $author;
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:products|max:255',
        ]);

        $author = AuthorModel::create($request->all());
        return response()->json($author, 201);
    }

    public function update(Request $request, AuthorModel $author)
    {
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete(AuthorModel $author)
    {
        $author->delete();

        return response()->json(null, 204);
    }
}